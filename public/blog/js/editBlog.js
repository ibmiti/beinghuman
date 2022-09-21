// EDIT ARTICLE/BLOG VIEW ( SEE: articles/edit/index )

    // - buttons for article type selection
    let recentButton = document.getElementById('recentButton');
    let babyArticleButton   = document.getElementById('babyArticleButton');
    let healthArticleButton  = document.getElementById('healthArticleButton');
    let joyfulArticleButton = document.getElementById('joyfulArticleButton');

    // - Div's for various article types
    let recentArticles = document.getElementById('mostRecentArticles');
    let babyArticles  = document.getElementById('babyArticles');
    let joyfulArticles  = document.getElementById('joyfulArticles');
    let healthArticles = document.getElementById('healthArticles');
    let humanArticles = document.getElementById('humanArticles');

    //  | default article selection
    window.onload = () =>  {
        recentButton.click();
        addActiveClassOnClick(recentButton);
     }

    function hideDivsWithArticles(x) {
        console.log(x);
        x.style.display = "none";
    }
    //  - Hide divs on load
    hideDivsWithArticles(recentArticles);
    hideDivsWithArticles(babyArticles);
    hideDivsWithArticles(childArticles);
    hideDivsWithArticles(healthArticles);

let count = 0;
// - add active class to buttons on click
    function addActiveClassOnClick(x){
        //  reload dom - to keep card carrying articles fresh.
        count++;
        console.log(count);
        if(count>10){
            window.location.reload();
        }
//  - so that we can refresh document to be able to refresh card on click
        x.className += " active";
// - remove active class
         setTimeout(()=>{
            x.classList.remove("active");
        }, 1500);

    }
// - show div with articles on click
   function showDivWithArticlesOnClick(x){
         x.style.display = 'inline';
    }

    recentButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Recent articles';

// - add active class r
        addActiveClassOnClick(recentButton);
// - show div with articles
        showDivWithArticlesOnClick(recentArticles);

// - add active class to div
        recentArticles.className += " active";
        if (recentArticles.className == " active"){
            // - hide all other articles if this po is active
            // hideDivsWithArticles(gu);
            hideDivsWithArticles(babyArticles);
            hideDivsWithArticles(childArticles);
            hideDivsWithArticles(healthArticles);
        }
    }

    babyButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Baby articles';
        addActiveClassOnClick(babyButton);
        // - show div with articles
        showDivWithArticlesOnClick(babyArticles);
        // - add active class to div
        babyArticles.className += " active";
        if (babyArticles.className == " active"){
            // - hide all other articles if this po is active
            // hideDivsWithArticles(gu);
            hideDivsWithArticles(recentArticles);
            hideDivsWithArticles(childArticles);
            hideDivsWithArticles(healthArticles);
        }
    }

    childButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Child Articles';
        addActiveClassOnClick(childButton);
        // - show div with articles
        showDivWithArticlesOnClick(childArticles);
        // - add active class to div
        childArticles.className += " active";
        if (childArticles.className == " active"){
            // - hide all other articles if this po is active

            // hideDivsWithArticles(gu);
            hideDivsWithArticles(babyArticles);
            hideDivsWithArticles(recentArticles);
            hideDivsWithArticles(healthArticles);
        }
    }

    // - when btn#g clicked run func.
    parentButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Parent articles';
    // - add .active onclick func.
            addActiveClassOnClick(parentButton);
    // - show div with articles
            showDivWithArticlesOnClick(healthArticles);
    // - add active class to div
            healthArticles.className += " active";
            if (healthArticles.className == " active"){
    // - hide all other articles if this po is active

                hideDivsWithArticles(recentArticles);
                hideDivsWithArticles(babyArticles);
                hideDivsWithArticles(childArticles);
            }
        }
