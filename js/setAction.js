let submit = document.querySelector('input[value="POST"]');
submit.addEventListener('click', e => {
    document.querySelector('form').action = 'addPost.php'
});