console.log('loaded "common.js"');

////////////////////////////////////////////////////////////////////////
// Fetch page contents

function getApiToken()
{
    const n = document.head.querySelector('meta[name=api-token]');
    return (n) ? n.content : '';
}

function getCsrfToken()
{
    const n = document.head.querySelector('meta[name=csrf-token]');
    return (n) ? n.content : '';
}
