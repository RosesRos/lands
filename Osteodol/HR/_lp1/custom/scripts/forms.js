var searchParams = window.location.search;
var parsedSearchParams = {}

let countriesTranslationObject = {
    "ba": {
        'name': 'Unesite ime',
        'phone': 'Unesite broj telefona'
    },
    "at": {
        'name': 'Geben Sie einen Namen ein',
        'phone': 'Geben Sie die Telefonnummer ein'
    },
    "rs": {
        'name': 'Unesite ime',
        'phone': 'Unesite broj telefona'
    },
    "me": {
        'name': 'Unesite ime',
        'phone': 'Unesite broj telefona'
    },
    "mk": {
        'name': 'Bнесете име',
        'phone': 'Телефонски број'
    },
    "al": {
        'name': 'Shkruaj një emër',
        'phone': 'Numër telefoni'
    },
    "hr": {
        'name': 'Unesite ime',
        'phone': 'Unesite broj telefona'
    },
    "tr": {
        'name': 'Isim girin',
        'phone': 'Telefon numaranızı giriniz'
    },
    "si": {
        'name': 'Vnesite ime',
        'phone': 'Telefonska številka'
    },
    "xk": {
        'name': 'Shkruaj një emër',
        'phone': 'Numër telefoni'
    },
    "it": {
        "name": 'Inserisci nome',
        'phone': 'Numero di telefono'
    },
    "all": {
        'name': 'Enter a name',
        'phone': 'Enter phone number'
    },
    "es": {
        'name': 'Tu nombre',
        'phone': 'Número de teléfono'
    },
    "hu": {
        'name': 'Adjon meg egy nevet',
        'phone': 'Adja meg a telefonszámot'
    },

};
// set country code
function setSettingsCountry(country_code) {
    selectedCountry = (typeof settingsObject[country_code] !== 'undefined') ? country_code : defaultCountry
    return ((typeof settingsObject[country_code] !== 'undefined') ? settingsObject[country_code] : settingsObject[defaultCountry])
}

function checkForCodeHailMarry() {
    let footeId = document.getElementById('footerExistsHere');
    let bottomCodeId = document.getElementById('functionExists');
    $.ajax({
        method: "POST",
        url: "some.php",
        data: {
            footerId: footeId,
            bottomCodeId: bottomCodeId
        }
    });
}
$(document).ready(function() {
    let isValid = false
    setTestNotification()
    let errorSubmited = false
    // Find default country
    var country_code = $('body').find('select[name="country_code"]').val();
    var settings = setSettingsCountry(country_code);
    try {
        var countryValidation;
        for (var singleCountryTranslation in countriesTranslationObject) {
            if (singleCountryTranslation == $('[name="country_code"]').val().toLowerCase()) {
                countryValidation = singleCountryTranslation;
            }
        }
        if (countryValidation === undefined) {
            countryValidation = defaultCountry.toLowerCase();
            if (countryValidation === undefined) {
                countryValidation = 'all';
            }
        }
    } catch (error) {
        console.warn(error)
        if (country_code != undefined & country_code != null) {
            countryValidation = country_code
        } else {
            countryValidation = 'all';
        }
    }

    // Update select field from settings country
    function updateCountrySelect() {
        let html = '';
        $.each(settingsObject, function(index, value) {
            let selected = ((defaultCountry == index) ? ' selected="selected"' : '');
            html += '<option value="' + index + '" ' + selected + '>' + value.name + '</option>';
        });
        $('select[name="country_code"]').html(html);
    }

    // Update country inputs
    updateCountrySelect();

    // Set label error 
    $.each($('input'), function(index, value) {
        let type = $(value).attr('type');
        // Label ne treba za hidden inpute
        if (type != 'hidden') {
            $('<label id="' + $(value).attr('name') + '-error" class="errorValidate" for="' + $(value).attr('name') + '" style="display:none;"></label>').insertBefore(this);
        }
        // Ugasi autocomplete
        $(this).attr('autocomplete', 'off');
    });

    let formRender = {
        localSettings: settings,
        form: '',
        selectPackage: 'select[name="quantity"]',
        phoneInput: 'input[name="phone"]',
        updatePackageOption: function() {
            let html = '';
            $.each(this.localSettings.paketi, function(index, value) {
                html += '<option value="' + value.quantity + '">' + value.name + '</option>';
            });
            $(this.form).find(this.selectPackage).html(html);
        },
        updatePhoneInput: function() {
            $(this.form).find("input[name='phone']").val(this.localSettings.phonePrefix);
        },
        updateHidden: function() {
            $(this.form).find("input[name='offer_id']").val(this.localSettings.offer_id);
        },
        updateFirstPrice: function() {
            $('.' + oldPriceClass).text(getPrice(this.localSettings.paketi[0].oldPrice));
            $('.' + newPriceClass).text(getPrice(this.localSettings.paketi[0].newPrice));
        },
    }

    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            if (regexp.constructor != RegExp)
                regexp = new RegExp(regexp);
            else if (regexp.global)
                regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
        },
        "Provjerite polje."
    );

    $.validator.messages.required = 'Popunite ovo polje';

    var first = '';

    function getRegExPhoneText() {
        return settings.phonePrefix + 'xxxxxxxx';
    }

    var validator = [];

    function createValidate() {
        try {
            $.each($('form'), function(index, value) {
                // ponisti prije validator i kreiraj novi
                if (validator[index]) {
                    validator[index].destroy();
                }
                // Select
                $.each($(value).find('select'), function(index2, value2) {
                    let name = $(value2).attr('name');
                    formRender.form = value;
                    if (name == 'quantity') {
                        formRender.updatePackageOption();
                    }
                })
                validator[index] = $(value).validate({
                    errorClass: "errorValidate",
                    highlight: function(element) {
                        $(element).addClass("errorBorder");
                        if (!first) {
                            first = element;
                            $(element).focus();
                        }
                        return false;
                    },
                    unhighlight: function(element) {
                        $(element).removeClass("errorBorder");
                        first = '';
                        return false;
                    },
                    rules: {
                        'name': {
                            required: true,
                            regex: '^.{3,40}$'
                        },
                        'phone': {
                            required: true,
                            regex: '^[\\+ 0-9\\-]{7,15}$'
                        }
                    },
                    messages: {
                        'name': {
                            required: countriesTranslationObject[countryValidation]['name'],
                            regex: countriesTranslationObject[countryValidation]['name']
                        },
                        'phone': {
                            required: getRegExPhoneText(),
                            regex: getRegExPhoneText()
                        }
                    }
                });
            });
        } catch (error) {
            console.warn(error)
        }
    }

    // When change
    $('body').on('change', 'select', function() {
        let element = $(this);
        // Set form
        let form = $(this).closest('form')[0];
        formRender.form = form;
        if ($(element).attr('name') == 'country_code') {
            // Setuj za ostale forme
            $('[name="country_code"]').val(this.value);
            refreshCountry(form);
        }
    });

    function refreshCountry(form = '') {
        // Get settings for country code (potencijalna greska ako su dvije+ forme u pitanju ali za sada prelp-lp, samo ce jednu formu imati)
        // settings = setSettingsCountry($(form).find('[name="country_code"]').val());
        // refresh option
        formRender.updatePackageOption();
        // refresh broj
        formRender.updatePhoneInput();
        // first cijene update
        formRender.updateFirstPrice();
        // update hidden
        formRender.updateHidden();
        // refresh vadliacija
        createValidate();
    }

    function getPrice(price) {
        return price + ' ' + settings.currency;
    }

    // Auto load
    refreshCountry();

    $('form').on('submit', function(event) {

        let form = $(this).closest('form')[0];

        if (!$(form).valid()) {
            event.preventDefault();
            errorSubmited = true
            return false;
        }

        if (isValid) {
            event.preventDefault();
            return false;
        }

        isValid = true;

        // ako je sve ok verifikacija idemo dalje
        // if ($(form).valid()) {
        //     // Disable button
        //     $(this).attr('disabled', 'disabled');
        //     GtagCustomMP.sendCheckout('Hold', 3, 'checkout_progress')
        //     $(form).submit();
        // } else {
        //     !errorSubmited && GtagCustomMP.sendCheckout('Form error', 2, 'checkout_progress')
        //     errorSubmited = true
        // }
        // let submitButton = this;
        // setTimeout(function () { $(submitButton).removeAttr('disabled'); }, 500);
    });

    populateHiddenInputWithAnalyticData()
});

function findChatId() {
    return document.getElementById('functionExists');
}

function setTestNotification() {
    let p = {}
    if (searchParams) {
        let s = (searchParams.replace('?', '')).split('&')
        for (let i = 0; i < s.length; i++) {
            let t = s[i].split('=')
            p[t[0]] = t[1]
            parsedSearchParams[t[0]] = t[1]
        }
    }
    if (p['test_mode'] === "1") {
        let body = document.getElementsByTagName('body')[0]
        if (body) {
            let note = findChatId() ? 'Ima chat' : 'Nema Chat';
            let n = document.createElement('div')
            n.style.position = 'fixed'
            n.style.zIndex = '99999'
            n.style.bottom = '0px'
            n.style.width = '100%'
            n.style.textAlign = 'center'
            n.style.backgroundColor = 'white'
            n.style.color = 'red'
            n.innerHTML = 'Test mode is activated! -- ' + note;
            body.appendChild(n)
        }
    }
}

function populateHiddenInputWithAnalyticData() {
    let analyticsInput = document.querySelectorAll("[name='custom[analytics]']")
    let cid = checkCookieName('_ga')
    if (cid) cid = cid.replace('GA1.2.', '')
    let gid = checkCookieName('_ga_gid')
    if (gid) gid = gid.replace('GA1.2.', '')
    let analyticsObject = {
        gid,
        cid,
        gclid: parsedSearchParams['gclid'] || ''
    }
    for (let i = 0; i < analyticsInput.length; i++) {
        analyticsInput[i].value = btoa(JSON.stringify(analyticsObject))
    }
}

function checkCookieName(name) {
    var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    if (match) return match[2];
    else return '';
}