(function(){

  function isLocal(){
    return document.location.origin.search('localhost') > -1;
  }

  function makeAttributeReplacer(attributeName){
    var remoteOrigin = '//fruitsharehouston.github.io';

    // make a function that will handle each element's attribute update based on
    // different attribute names.
    return function(){
      var $item = $(this);
      var itemAttribute = $item.attr(attributeName);

      // if the item has the attribute and the attribute is set to the remote origin,
      // replace the attribute locally with the local origin.
      if(itemAttribute && itemAttribute.search(remoteOrigin) > -1){
        $item.attr(attributeName, itemAttribute.replace(remoteOrigin, document.location.origin));
      }
    }
  }

  function setupRoutes(){
    if(isLocal()){
      $('a, link').each(makeAttributeReplacer('href'));
      $('img, script').each(makeAttributeReplacer('src'));
    }
  }

  setupRoutes();

})();