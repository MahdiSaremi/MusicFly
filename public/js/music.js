Elements = {
    score: 'score'
};

(function(Elements) {

    // Score
    let score = document.getElementsByClassName(Elements.score)[0]
    for(i = 0; i < score.children.length; i++) {
        (function(i, child) {

            child.addEventListener('mouseenter', function() {
                for(z = 0; z <= i; z++) {
                    score.children[z].classList.add('target')
                }
            })
            child.addEventListener('mouseleave', function() {
                for(z = 0; z <= i; z++) {
                    score.children[z].classList.remove('target')
                }
            })
            child.addEventListener('click', function() {
                alert(i + 1)
            })

        })(i, score.children[i])
    }

})(Elements)
