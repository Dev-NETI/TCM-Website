/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // ... existing content config
    ],
    theme: {
        extend: {
            keyframes: {
                fadeIn: {
                    "0%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                slideDown: {
                    "0%": { transform: "translateY(-20px)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
            },
            animation: {
                fadeIn: "fadeIn 1s ease-in",
                slideDown: "slideDown 1s ease-out",
            },
        },
    },
    plugins: [],
};
