(function(){

    let observer = new MutationObserver(function(mutations) {
        mutations.forEach((mutation) => {
            console.log('Mutation type: ' + mutation.type);

            switch (mutation.type) {

                case 'childList':
                    console.log('Added ' + mutation.addedNodes[0].tagName + ' tag.');
                    break;

                case 'attributes':
                    console.log('Modified ' + mutation.attributeName + ' attribute.')
                    break;

            }


            // if ( mutation.type == 'childList' ) {
            //     if (mutation.addedNodes.length >= 1) {
            //         if (mutation.addedNodes[0].nodeName != '#text') {
            //             console.log('Added ' + mutation.addedNodes[0].tagName + ' tag.');
            //         }
            //     }
            //     else if (mutation.removedNodes.length >= 1) {
            //         console.log('Removed ' + mutation.removedNodes[0].tagName + ' tag.')
            //     }
            // }
            // else if (mutation.type == 'attributes') {
            //     console.log('Modified ' + mutation.attributeName + ' attribute.')
            // }
        });

        // return true;
    });

    let observerConfig = {
        attributes: true,
        childList: true,
        characterData: true
    };

// Listen to all changes to body and child nodes
    let targetNode = document.querySelector('.some-div');
    observer.observe(targetNode, observerConfig);

// Let's add a sample node to see what the MutationRecord looks like
    targetNode.appendChild(document.createElement('li'));

    // document.body.setAttribute('id', 'booooody');

})();