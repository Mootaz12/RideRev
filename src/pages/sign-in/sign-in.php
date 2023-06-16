<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="./sign-in.js" defer></script>
    <title>RideRev</title>
  </head>
  <body class="grid place-items-center h-[100vh]">
    <div class="flex flex-col gap-7 font-roboto p-6 rounded-md shadow-lg">
      <h2 class="font-bold text-2xl font-poppins tracking-wide">Sign in</h2>
      <form method="POST" action="./signin.php" id="form" class="flex flex-col gap-2">
        <label for="phone" class="hidden">phone</label>
        <input
          name="phone"
          id="phone"
          type="text"
          class="p-4 outline-0 border-1 border-gray-400 rounded-sm text-zinc-700 font-medium text-lg"
          placeholder="Phone or Email"
          required
        />
        <label for="password" class="hidden">password</label>
        <div class="relative bg-red-900">
          <input
            name="password"
            id="pass-input"
            type="password"
            class="p-4 outline-0 border-1 border-gray-400 rounded-sm w-full text-zinc-700 font-medium text-lg"
            placeholder="Password"
            required
          />
          <button
            type="button"
            id="show-pass-btn"
            class="text-sm text-blue-900 absolute top-[50%] translate-y-[-50%] left-[70%] hover:scale-110 transition-all duration-200 ease-in-out"
          >
            show
          </button>
          <?php
            session_start();
            if(isset($_SESSION["errMsg"])){
              echo "<p id='errMsg' class='text-sm text-red-600 px-2'>" . $_SESSION["errMsg"] . "</p>";
            }
          ?>
        </div>
        <a class="text-blue-900">Forgot password?</a>
        <button
          type="submit"
          class="text-white bg-darkBlue rounded-full p-2 font-medium tracking-wide"
        >
          Sign in
        </button>
      </form>
      <p
        class="text-center hover:tracking-wide transition-all ease-in-out duration-200"
      >
        new to RideRev?
        <a href="../sign-up/sign-up.php" class="text-blue-900">join now</a>
      </p>
    </div>
  </body>
</html>
