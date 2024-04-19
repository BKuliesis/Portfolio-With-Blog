let select = document.querySelector('select');
let posts = document.querySelectorAll('.blog');
select.addEventListener('change', e => {
    let month = select.value;
    posts.forEach(post => {
        if (month === 'All') {
            post.style.display = 'flex';
        } else {
            let postMonth = post.querySelector('p').textContent;
            if (postMonth.includes(month)) {
                post.style.display = 'flex';
            } else {
                post.style.display = 'none';
            }
        }
    });
});