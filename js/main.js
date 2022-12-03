// ######## OAuth API
hello.init({
  facebook: "605612360973350",
  google: "885258239499-35kk0d29eb6jbrtes5g0abbv4k2rqo4v.apps.googleusercontent.com"
},
{
  redirect_uri: "http://localhost/solovino/"
});


hello.on("auth.login", function(auth)
{
  // Call user information, for the given network
  hello(auth.network).api("me").then(function(p)
  {
      alert("Hola" + p.first_name);
      // p.first_name,
      // p.last_name,
      // p.email,
      // p.thumbnail
  });
});



// Logout button
const logout = function()
{
  hello("google").logout().then(function()
  {
      window.location.href = "/";
  }, function(e)
  {
      console.log("logout error: " + e.error.message);
  });
}


// sign in usin Google button
//initOAuth("google");
// sign in usin Facebook button
//initOAuth("facebook");

function initOAuth(network, force = false) {
  // Make a login call and handle the response using promises
  var hi = hello(network);
  hi.login({display: "popup", scope: "email", force: force}).then(function()
  {
      console.log("fullfilled", "making api call");
      // Reurn another promise to get the users profile.
      return 	hi.api("me");
  }).then(function(p)
  {
      // Print it to console.
      console.log("hello.api(me) was fullfilled", p);
      return p;
  }).then(function(p)
  {
      // p.first_name
      // p.last_name
      // p.email
      // p.name
      // p.thumbnail
      // p.id
  }).then(null, function(e)
  {
      // Uh oh
      console.error(e);
  });
}