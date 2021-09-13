document.getElementById('mobile-responsive-nav-button').addEventListener('click', () => {
    document.getElementById('mobile-responsive-nav').classList.toggle('hidden');
});

let fileAsset = ['assets/images/asset-1.jpg', 'assets/images/asset-2.jpg', 'assets/images/asset-3.jpg'];

document.getElementById('slideshow-control-prev').addEventListener('click', () => {
    changeMainBannerImage(-1);
});
document.getElementById('slideshow-control-next').addEventListener('click', () => {
    changeMainBannerImage(1);
});

let currentMainBannerImageIndex = 0;

document.getElementById('slideshow-banner-image').src = fileAsset[currentMainBannerImageIndex];

function changeMainBannerImage(index){
    currentMainBannerImageIndex += index;

    if(currentMainBannerImageIndex <= 0){
        currentMainBannerImageIndex = fileAsset.length - 1;
    } else if(currentMainBannerImageIndex > fileAsset.length - 1) {
        currentMainBannerImageIndex = 0;
    }

    document.getElementById('slideshow-banner-image').src = fileAsset[currentMainBannerImageIndex];

    clearInterval(autoSlideBannerImage);
}

var autoSlideBannerImage = setInterval(() => {
    changeMainBannerImage(1);
}, 3000);