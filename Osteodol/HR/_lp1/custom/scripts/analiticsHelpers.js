function addTopWindowListeners() {
    window.addEventListener(
        'message',
        (event) => {
            const message = event.data
            const testMode = parsedSearchParamsToObject.test_mode == '1'

            if (testMode && !pageConfig.sendAnalyticEventsOnTestMode) {
                console.warn("Reporting to platform is blocked: Main page test mode")
                console.log({
                    message,
                    event
                });
                return
            }
            try {
                switch (message.type) {
                    case 'pageview':
                        handlePageViewMessage(message)
                        break;
                    case 'viewcontent':
                        handleViewContentMessage(message)
                        break;
                    case 'checkout':
                        handleCheckoutMessage(message)
                        break;
                    case 'lead':
                        handleLeadMessage(message)
                        break;
                    default:
                        if (message.pcmPixelPostMessageEvent) {
                            console.log('Facebook sent event', message.pcmPixelPostMessageEvent.ev)
                        } else if (message === 'custom:DOMContentLoaded') {
                            console.log("Dom loaded trigger")
                        } else
                            console.log({
                                message,
                                event
                            })
                        break;
                }

            } catch (error) {
                console.error({
                    error,
                    message,
                    event
                })
            }
        },
        false
    );
}

function handlePageViewMessage() {
    const useGoogle = !!pageConfig.useGoogleAnalytics && !!pageConfig.googleGtagId
    const useFb = !!pageConfig.useFacebookAnalytics && !!pageConfig.facebookPixelId

    // if (useGoogle) sendPageViewEventGtag()

    if (useFb) sendPageViewEventFb()

    if (!useGoogle && !useFb) {
        console.warn("No conversion platform has been selected")
    }
}

function handleViewContentMessage(data) {
    const useGoogle = !!pageConfig.useGoogleAnalytics && !!pageConfig.googleGtagId
    const useFb = !!pageConfig.useFacebookAnalytics && !!pageConfig.facebookPixelId

    if (useGoogle) sendViewItemEventGtag(data)

    if (useFb) sendViewContentEventFb(data)


    if (!useGoogle && !useFb) {
        console.warn("No conversion platform has been selected")
    }
}

function handleCheckoutMessage(data) {
    const useGoogle = !!pageConfig.useGoogleAnalytics && !!pageConfig.googleGtagId
    const useFb = !!pageConfig.useFacebookAnalytics && !!pageConfig.facebookPixelId

    if (useGoogle) sendCheckoutEventGtag(data)

    if (useFb) sendCheckoutEventFb(data)

    if (!useGoogle && !useFb) {
        console.warn("No conversion platform has been selected")
    }
}

function handleLeadMessage(data) {
    const useGoogle = !!pageConfig.useGoogleAnalytics && !!pageConfig.googleGtagId
    const useFb = !!pageConfig.useFacebookAnalytics && !!pageConfig.facebookPixelId
    const sendPurchase = !!pageConfig.sendPurchaseOnSuccessPage

    if (useGoogle) {
        sendLeadEventGtag(data)
        if (sendPurchase) sendPurchaseEventGtag(data)
    }

    if (useFb) {
        sendLeadEventFb(data)
        if (sendPurchase) sendPurchaseEventFb(data)
    }

    if (!useGoogle && !useFb) {
        console.warn("No conversion platform has been selected")
    }
}

function triggerPageViewEvent() {
    const data = {
        type: "pageview",
        format: "custom:event",
    }
    window.postMessage(data, "*");
}

function triggerCheckoutEvent(id, name) {

    const referer = window.location.origin
    const offerId = id
    const productName = name
    const testMode = window.location.search.indexOf('test_mode=1' !== -1) ? 0 : 1
    const data = {
        type: "checkout",
        format: "custom:event",
        offerId,
        referer,
        testMode,
        productName,
        label: "Checkout for " + productName + " (" + offerId + ")"
    }
    window.postMessage(data, "*");
}

function triggerViewContentEvent(id, name) {

    const referer = window.location.origin
    const offerId = id
    const productName = name
    const testMode = window.location.search.indexOf('test_mode=1' !== -1) ? 0 : 1
    const data = {
        type: "viewcontent",
        format: "custom:event",
        offerId,
        referer,
        testMode,
        productName,
        label: "View content for " + productName + " (" + offerId + ")"
    }
    window.postMessage(data, "*");
}