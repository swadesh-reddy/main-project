function hidenav()
{
	     document.getElementById("sidenav").style.marginLeft = '-340px';
         document.getElementById("content").style.marginRight = '50px';
         document.getElementById("content").style.width = '80%';
         document.getElementById("content").style.transition = 'all 2s';
         document.getElementById("fa-arrow-right").style.display = 'block';
        document.getElementById("fa-close").style.display = 'none';
        document.getElementById("sidenav").style.transition = '2s';
     
}
function shownav()
{
		document.getElementById("sidenav").style.marginLeft = '0px';
        document.getElementById("content").style.marginRight = '10px';
        document.getElementById("content").style.width = '66%';
          document.getElementById("content").style.transition = 'all 2s';
         document.getElementById("fa-arrow-right").style.display = 'none';
        document.getElementById("fa-close").style.display = 'block';
        document.getElementById("sidenav").style.transition = '2s';
}