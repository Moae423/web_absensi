import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                satoshi: ["Satoshi", "sans-serif"],
            },
            colors: {
                blue: "#4d6eff",
                blueGray: "#7b92b2",
                green: "#67cba0",
                darkBlue: "#181a2a",
            },
            themes: ["light", "dark", "corporate"],
        },
    },
    plugins: [require("preline/plugin"), daisyui],
};
