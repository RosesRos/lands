const parsedSearchParamsToObject = {};

function parseParamsToObject() {
    const location = window.location.search.replace('?', '');
    let temp1 = location.split('&')
    for (let i = 0; i < temp1.length; i++) {
        let temp2 = temp1[i].split('=')
        parsedSearchParamsToObject[temp2[0]] = temp2[1] ? temp2[1] : ''
    }
}
parseParamsToObject()