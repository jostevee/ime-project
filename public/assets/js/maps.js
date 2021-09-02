window.addEventListener( 'load', function() {
    var box = document.getElementById('box'),
        docHeight = document.documentElement.offsetHeight;
    
    window.addEventListener( 'scroll', function() {
    // normalize scroll position as percentage
      var scrolled = window.scrollY  / ( docHeight - window.innerHeight ),
          transformValue = 'scale('+ scrolled +')';
    
      console.log(window.scrollY);
  
      box.style.WebkitTransform = transformValue;
      box.style.MozTransform = transformValue;
      box.style.OTransform = transformValue;
      box.style.transform = transformValue;
      
    }, false);
    
  }, false);