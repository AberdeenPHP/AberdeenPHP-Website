window.addEventListener('load', function () {
    document.body.addEventListener('click', function (event) {

        if (event.target.id === 'btk-lightbox-overlay') {
            event.target.classList.remove('btk-go');
            return false;
        }

        if (event.target.tagName.toLowerCase() === 'img' && event.target.classList.contains('btk-lightbox-img')) {
            let wrapper = document.querySelector('#btk-lightbox-overlay');

            if (event.target.parentNode.id === 'btk-lightbox-overlay') {
                wrapper.classList.remove('btk-go');
                return false;
            }

            let image = event.target.dataset.btkImg;

            console.log(image);

            if ( image === '' || image === null)
            {
                image = event.target.cloneNode(false);
            } else {
                img = document.createElement('img');
                img.src = image;
                image = img;
            }

            image.classList.add('btk-lightbox-item');

            if (wrapper === null) {
                wrapper = document.createElement('div');
                wrapper.id = 'btk-lightbox-overlay';
                document.body.appendChild(wrapper);
                wrapper.classList.add('btk-lightbox-wrapper');
            }
            let clonedWrapper = wrapper.cloneNode(false);

            wrapper.parentNode.replaceChild(clonedWrapper, wrapper);
            wrapper = clonedWrapper;

            wrapper.appendChild(image);

            setTimeout(function () {
                wrapper.classList.add('btk-go');
            }, 150);

        }
    });
});