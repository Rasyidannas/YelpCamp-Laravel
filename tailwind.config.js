/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        fontSize: {
            display: "3.5rem",
            "heading-1": "3rem",
            "heading-2": "2.4rem",
            "heading-3": "1.94rem",
            "heading-4": "1.56rem",
            "heading-5": "1.25rem",
            paragraph: "1rem",
            btn: ".8rem",
            small: ".75rem",
        },
        fontFamily: {
            sans: ["Roboto", "sans-serif"],
        },
        extend: {
            spacing: {
                "1/2": ".5rem",
                1: "1rem",
                2: "2rem",
                3: "3rem",
                4: "4rem",
            },
            borderRadius: {
                "1/2": ".5rem",
                1: "1rem",
                2: "2rem",
                3: "3rem",
            },
        },
    },
    plugins: [],
};
