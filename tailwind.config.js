/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {
      colors: {
        lightblue: "#4BF1F1",
        darkBlue: "#3A4856",
        limeGreen: "#43FE01",
        grey: "#D9D9D9",
        darkGrey: "#453D3D",
      },
      fontFamily: {
        poppins: "Poppins",
        roboto: "Roboto",
      },
      screens: {
        tablet: "640px",
        laptop: "1024px",
        desktop: "1280px",
      },
    },
  },
  plugins: [],
};
