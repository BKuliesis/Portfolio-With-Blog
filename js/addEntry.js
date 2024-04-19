let form = document.querySelector('form');
let title = document.querySelector('input[name="title"]');
let text = document.querySelector('textarea');

form.addEventListener('submit', e => {
    if (title.value === '') {
        e.preventDefault();
        title.placeholder = '* Title';
        document.head.appendChild(Object.assign(document.createElement('style'), {textContent: 'input[name="title"]::placeholder { color: red; }'}));
    }
    if (text.value === '') {
        e.preventDefault();
        text.placeholder = '* Enter your text here';
        document.head.appendChild(Object.assign(document.createElement('style'), {textContent: 'textarea::placeholder { color: red; }'}));
    }
});

title.addEventListener('focus', () => {
    title.placeholder = 'Title';
    document.head.appendChild(Object.assign(document.createElement('style'), {textContent: 'input[name="title"]::placeholder { color: initial; }'}));
});

text.addEventListener('focus', () => {
    text.placeholder = 'Enter your text here';
    document.head.appendChild(Object.assign(document.createElement('style'), {textContent: 'textarea::placeholder { color: initial; }'}));
});

form.addEventListener('reset', e => {
    e.preventDefault();
    if (confirm('Are you sure you want to clear the form?')) {
        title.value = '';
        text.value = '';
        title.placeholder = 'Title';
        text.placeholder = 'Enter your text here';
        document.head.appendChild(Object.assign(document.createElement('style'), {textContent: 'input[name="title"]::placeholder, textarea::placeholder { color: initial; }'}));
    }
});