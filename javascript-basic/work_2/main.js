var displayedImage = document.querySelector('.displayed-img');
var thumbBar = document.querySelector('.thumb-bar');

btn = document.querySelector('button');
var overlay = document.querySelector('.overlay');

/* 遍历图片并添加至缩略图区 */
for (var i = 1; i <= 5; i++)
{
    var newImage = document.createElement('img');
    newImage.setAttribute('src', 'images/pic' + i + '.jpg');
    thumbBar.appendChild(newImage);
    newImage.onclick = changeImage;
}

function changeImage(e)
{
    var imageSrc = e.target.getAttribute('src');
    displayedImage.setAttribute('src',imageSrc);
}


/* 编写 变亮/变暗 按钮 */

btn.addEventListener('click' ,  AdjustTransparency);

function AdjustTransparency(){
    var btnClass = btn.getAttribute('class');
    if(btnClass === "dark")
    {
        btn.setAttribute('class','light');
        btn.textContent = "变暗";
        overlay.style.backgroundColor = 'rgba(0,0,0,0)';
    }
    else
    {
        btn.setAttribute('class','dark');
        btn.textContent = "变亮";
        overlay.style.backgroundColor = 'rgba(0,0,0,0.5)';
    }
}
