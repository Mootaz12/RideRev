<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="./sign-up.js" defer></script>
    <title>RideRev</title>
  </head>
  <body class="grid place-items-center h-[100vh]">
    <div class="flex flex-col gap-7 font-roboto p-6 rounded-md shadow-lg">
      <h2 class="font-bold text-2xl font-poppins tracking-wide">Sign up</h2>
      <form
        action="./signup.php"
        method="POST"
        id="form"
        class="flex flex-col gap-2"
      >
        <label for="name" class="hidden">name</label>
        <input
          name="name"
          id="name-input"
          type="text"
          class="p-2 outline-0 border-1 border-gray-400 rounded-sm text-zinc-700 font-medium text-lg"
          placeholder="Name"
          required
          value="mo3taz"
        />
        <div class="flex flex-col justify-center">
          <label for="phone" class="hidden">phone</label>
          <input
            name="phone"
            id="phone-input"
            type="text"
            class="p-2 outline-0 border-1 border-gray-400 rounded-sm text-zinc-700 font-medium text-lg"
            placeholder="Phone"
            required
            value="53812789"
          />
          
            <?php
            session_start(); 
            if(isset($_SESSION["errMsg"]) ){
              echo "<p id='errMsg' class='text-sm text-red-600 px-2'>" . $_SESSION["errMsg"] . "</p>";
            }
            unset($_SESSION["errMsg"]); ?>
          
          <label for="password" class="hidden">password</label>
        </div>
        <div class="relative">
          <input
            name="password"
            id="pass-input"
            type="password"
            class="p-2 outline-0 border-1 border-gray-400 rounded-sm w-full text-zinc-700 font-medium text-lg"
            placeholder="Password"
            required
            value="password"
          />
          <button
            type="button"
            id="show-pass-btn"
            class="text-sm text-blue-900 absolute top-[50%] translate-y-[-50%] left-[70%] hover:scale-110 transition-all duration-200 ease-in-out"
          >
            show
          </button>
        </div>
        <label for="confirm-password" class="hidden">confirm password</label>
        <div class="relative bg-red-900">
          <input
            name="confirm-password"
            id="pass-conf-input"
            type="password"
            class="p-2 outline-0 border-1 border-gray-400 rounded-sm w-full text-zinc-700 font-medium text-lg"
            placeholder="Confirm password"
            required
            value="password"
          />
          <button
            type="button"
            id="show-pass-conf-btn"
            class="text-sm text-blue-900 absolute top-[50%] translate-y-[-50%] left-[70%] hover:scale-110 transition-all duration-200 ease-in-out"
          >
            show
          </button>
        </div>
        <button
          type="submit"
          class="text-white bg-darkBlue rounded-full p-2 font-medium tracking-wide"
        >
          Sign up
        </button>
      </form>
    </div>
  </body>
</html>
