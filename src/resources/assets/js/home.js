$(document).ready(() => {
  console.log('SAS Dashboard home loaded.');

  const api = new GhostContentAPI({
    url: 'https://wiki.whodareswins.space',
    key: 'ed7788e955aea5069d13112353',
    version: 'v2'
  });

  let fetchedPosts = [];

  // fetch 5 posts, including related tags and authors
  api.pages
    .browse({limit: 50, include: 'tags,authors'})
    .then((posts) => {
      posts.forEach((post) => {
        fetchedPosts.push(post);
      });

      console.log(fetchedPosts);
  
      new Vue({
        el: '#app',
        data: {
          fetchedPosts
        }
      });
    })
    .catch((err) => {
      console.error(err);
    });
});
