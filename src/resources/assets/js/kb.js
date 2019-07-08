$(document).ready(() => {
  console.log('SAS Dashboard KB loaded.');

  const api = new GhostContentAPI({
    url: 'https://wiki.whodareswins.space',
    key: 'ed7788e955aea5069d13112353',
    version: 'v2'
  });

  let fetchedPosts = [];

  api.pages
    .browse({limit: 50, include: 'tags,authors'})
    .then((posts) => {
      posts.forEach((post) => {
        fetchedPosts.push(post);
      });
  
      new Vue({
        el: '#kb',
        data: {
          fetchedPosts
        }
      });
    })
    .catch((err) => {
      console.error(err);
    });
});
