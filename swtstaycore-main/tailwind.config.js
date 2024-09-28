/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "-apple-system",
                    "BlinkMacSystemFont",
                    '"Segoe UI"',
                    "Roboto",
                    '"Helvetica Neue"',
                    "Arial",
                    "sans-serif",
                ],
            },
            colors: {
                option: "#E9EEF5",
                primary: {
                    50: "#e6eef9",
                    100: "#b3cce9",
                    200: "#80aad9",
                    300: "#4d88c9",
                    400: "#1a66b9",
                    500: "#0E4084", // Main primary color
                    600: "#0c3468",
                    700: "#09284d",
                    800: "#061c32",
                    900: "#040f18",
                    950: "#02060c",
                },
            },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            charts: true,
        }),
    ],
};

