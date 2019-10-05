// const version = "0.0.1";
const cacheName = 'dentist-v0.1'; //-${version}


// Default files to always cache
var cacheFiles = [
  '/SmileBrite/home.php',
  '/SmileBrite/requestappointment.php',
  '/SmileBrite/blog.php',
  '/SmileBrite/about.php',
 '/SmileBrite/sub-pages/team/komal.php',
 '/SmileBrite/sub-pages/blog/no-prep-veneers.php',
   '/SmileBrite/static/css/navbar.css',
   '/SmileBrite/static/css/footer.css',
   '/SmileBrite/static/css/styles.css',
   '/SmileBrite/static/css/components.css',
   '/SmileBrite/static/css/responsive.css',
   '/SmileBrite/static/css/loading.css',
   '/SmileBrite/static/css/blog.css',
   '/SmileBrite/static/css/testimonial.css',

  //'/SmileBrite/static/js/forms.js',

  '/SmileBrite/static/js/jquery-3.4.1.min.js',
  '/SmileBrite/static/js/navbar.js',
  '/SmileBrite/static/js/script.js',
  '/SmileBrite/static/images/logo/favicon.ico',
  '/SmileBrite/static/images/icon/notification-close-icon.svg',
  '/SmileBrite/static/images/icon/notification-icon-active.svg',
  '/SmileBrite/static/images/icon/notification-icon-active-mob.svg',
  '/SmileBrite/static/images/icon/notification-close-icon-mob.svg',
  '/SmileBrite/static/images/icon/external-link-blue.png',
  '/SmileBrite/static/images/logo/logo192x192.png',
  '/SmileBrite/static/images/logo/logo236x236.png',
]


self.addEventListener('install', function(e) {
    console.log('[ServiceWorker] Installed');

    // e.waitUntil Delays the event until the Promise is resolved
    e.waitUntil(

      // Open the cache
      caches.open(cacheName).then(function(cache) {

        // Add all the default files to the cache
      console.log('[ServiceWorker] Caching cacheFiles');
      return cache.addAll(cacheFiles);
      })
  ); // end e.waitUntil
});


self.addEventListener('activate', function(e) {
    console.log('[ServiceWorker] Activated');

    e.waitUntil(

      // Get all the cache keys (cacheName)
    caches.keys().then(function(cacheNames) {
      return Promise.all(cacheNames.map(function(thisCacheName) {

        // If a cached item is saved under a previous cacheName
        if (thisCacheName !== cacheName) {

          // Delete that cached file
          console.log('[ServiceWorker] Removing Cached Files from Cache - ', thisCacheName);
          return caches.delete(thisCacheName);
        }
      }));
    })
  ); // end e.waitUntil

});



  
  self.addEventListener('fetch', function(e) {
    console.log('[ServiceWorker] Fetch', e.request.url);
  
    // e.respondWidth Responds to the fetch event
    e.respondWith(
  
      // Check in cache for the request being made
      caches.match(e.request)
  
  
        .then(function(response) {
  
          // If the request is in the cache
          if ( response ) {
            console.log("[ServiceWorker] Found in Cache", e.request.url, response);
            // Return the cached version
            return response;
          }
  
          // If the request is NOT in the cache, fetch and cache
  
          var requestClone = e.request.clone();
          fetch(requestClone)
            .then(function(response) {
  
              if ( !response ) {
                console.log("[ServiceWorker] No response from fetch ")
                return response;
              }
  
              var responseClone = response.clone();
  
              //  Open the cache
              caches.open(cacheName).then(function(cache) {
  
                // Put the fetched response in the cache
                cache.put(e.request, responseClone);
                console.log('[ServiceWorker] New Data Cached', e.request.url);
  
                // Return the response
                return response;
        
                  }); // end caches.open
  
            })
            .catch(function(err) {
              console.log('[ServiceWorker] Error Fetching & Caching New Data', err);
            });
  
  
        }) // end caches.match(e.request)
    ); // end e.respondWith
  });



  self.addEventListener('fetch', function(event) {
    // We will cache all POST requests to matching URLs
    if(event.request.method === "POST" || event.request.url.href.match(/*...*/)){
        event.respondWith(
            // First try to fetch the request from the server
        fetch(event.request.clone())
            // If it works, put the response into IndexedDB
            .then(function(response) {
                // Compute a unique key for the POST request
                var key = getPostId(request);
                // Create a cache entry
                var entry = {
                    key: key,
                    response: serializeResponse(response),
                    timestamp: Date.now()
                };
  
                /* ... save entry to IndexedDB ... */
  
                // Return the (fresh) response
                return response;
            })
            .catch(function() {
                // If it does not work, return the cached response. If the cache does not
                // contain a response for our request, it will give us a 503-response
                var key = getPostId(request);
               // var cachedResponse = /* query IndexedDB using the key */;
                return response;
            })
        );
    }
  })