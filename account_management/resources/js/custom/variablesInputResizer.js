function getScrollHeight(elm) {
    var savedValue = elm.value
    elm.value = ''
    elm._baseScrollHeight = elm.scrollHeight
    elm.value = savedValue
}

function onExpandableTextareaInput({ target: elm }) {
    // make sure the input event originated from a textarea and it's desired to be auto-expandable
    if (!elm.classList.contains('autoExpand') || !elm.nodeName == 'TEXTAREA') return

    var minRows = elm.getAttribute('data-min-rows') | 0, rows;
    !elm._baseScrollHeight && getScrollHeight(elm)

    elm.rows = minRows
    rows = Math.ceil((elm.scrollHeight - elm._baseScrollHeight) / 20)
    elm.rows = minRows + rows
}


// global delegated event listener
document.addEventListener('input', onExpandableTextareaInput)

// adjust inputs on load
var inputs = [...document.querySelectorAll('.js-variable-input')];

for (const input of inputs) {
    var minRows = input.getAttribute('data-min-rows') | 0, rows;
    !input._baseScrollHeight && getScrollHeight(input)

    input.rows = minRows
    rows = Math.ceil((input.scrollHeight - input._baseScrollHeight) / 16)
    console.log(rows);
    input.rows = minRows + rows
}