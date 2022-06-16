<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="assets\YahyaNmini.png" type="image/x-icon"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Contact YahyaN</title>
</head>
  <body
  class="bg-gradient-to-l from-gray-700 to-gray-800 flex flex-wrap justify-around items-center"
  >
  <div class="text-center">
    <h1 class="text-[2.5rem] text-[#666af6] mt-4 font-medium">Any Queries?</h1>
    <h3 class="text-[1.5rem] text-[#f9f9f9] font-light">Contact us Now</h3>
    <img src="assets\contact_illustration.svg" class="h-80 w-auto scale-x-[-1]">
  </div>
  <div class="px-10 pb-4 h-[100vh] w-[50vw] mr-16 align-middle bg-white drop-shadow-xl">
    <h1
    class="text-[2.5rem] mb-8 mt-4 font-bold text-gray-700"
    >
      Contact Form
    </h1>
    <form
    name="Contact"
    class="w-full max-w-lg"
    method='post' 
    action='confirm_sub.php'
    >
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label
          class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
          for="grid-first-name"
          >
            First Name
          </label>
          <input
          class="appearance-none block w-full bg-gray-200
          text-gray-700 border rounded py-3 px-4 mb-3
          leading-tight focus:outline-none focus:bg-white"
          id="grid-first-name"
          type="text"
          name="FirstName"
          placeholder="Nikola"
          value="<?= isset($_POST['FirstName']) ? $_POST['FirstName'] : '' ?>"
          required
          >
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Last Name
          </label>
          <input
          class="appearance-none block w-full bg-gray-200 text-gray-700
          border border-gray-200 rounded py-3 px-4 leading-tight
          focus:outline-none focus:bg-white focus:border-gray-500"
          id="grid-last-name"
          type="text"
          name="LastName"
          placeholder="Tesla"
          value="<?= isset($_POST['LastName']) ? $_POST['LastName'] : '' ?>"
          required>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
            Email Address
          </label>
          <input
          class="appearance-none block w-full bg-gray-200 text-gray-700
          border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
          focus:outline-none focus:bg-white focus:border-gray-500"
          id="grid-email"
          name="Email"
          type="email"
          placeholder="Enter your email address"
          value="<?= isset($_POST['Email']) ? $_POST['Email'] : '' ?>"
          required>
          <p class="text-gray-600 text-xs italic"></p>
        </div>
      </div>
      <div class="w-full md:w-1/3 md:mb-6">
          <label
          class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
          for="grid-issue-type"
          >
            Issue type
          </label>
          <div class="relative">
            <select
            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-issue-type"
            name="Issue"
            required>
              <option value="">Select your issue</option>
              <option>Query</option>
              <option>Feedback</option>
              <option>Complain</option>
              <option value="Not Specified">Other</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
        </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-comment">
            Comment
          </label>
          <textarea
          class="appearance-none block w-full bg-gray-200 text-gray-700
          border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
          focus:outline-none focus:bg-white focus:border-gray-500"
          id="grid-comment"
          name="Comment"
          type="text"
          placeholder="Write your comments here"
          >
          </textarea>
          <p class="text-gray-600 text-xs italic">Make it as long as you'd like</p>
        </div>
      </div>
      <input class="bg-[#666af6] hover:bg-transparent
      text-white font-semibold hover:text-[#666af6] py-2
      px-4 border border-[#666af6] hover:border-[#666af6] rounded duration-500 cursor-pointer" 
      type='submit'
      >
    </form>
  </div>
<!--     <script type="text/javascript">
        window.onbeforeunload = function() {
          return "Data will be lost if you leave the page, are you sure?";
        };
    </script> -->
  </body>
</html>