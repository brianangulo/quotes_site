/**
 * Sets the quote a element to a new quote on the DOM
 * @param {string} quote the quote to set
 */
function renderQuote(quote) {
    const quoteElement = document.getElementById('quote');
    quoteElement.innerText = quote;
}

/**
 * Requests a fresh quote from the backend.
 * @returns {Promise<string>} formatted quote
 */
async function fetchFreshQuote() {
    let errMessage = 'Error occurred sorry, please try again.';
    let quoteLocation = '/api/random-quote';
    const response = await fetch(quoteLocation);
    // if response is success then we return the quote
    if (response.ok) {
        let json = await response.json();
        return json['quote'];
    }
    return errMessage;
}

async function refreshQuote() {
    const quoteResponse = fetchFreshQuote();
    const btn = document.getElementById('refreshButton');
    const btnTitle = btn.innerText;
    const spinner = btn.querySelector('.spinner-border');
    const spinnerClone = spinner.cloneNode();
    // show spinner
    spinner.setAttribute('hidden', false);
    // set button to loading
    btn.innerText = 'Loading...';
    btn.setAttribute('disabled', true);
    // render quote
    const quoteContent = await quoteResponse;
    renderQuote(quoteContent);
    // remove loading states
    btn.innerText = btnTitle;
    btn.removeAttribute('disabled');
    // hide spinner
    spinner.setAttribute('hidden', true);
    // add spinner back to button
    btn.appendChild(spinnerClone);
}
