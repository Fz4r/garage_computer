/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./app/Views/**/*.php",
        "./modules/**/Views/**/*.php", // Mendukung struktur HMVC Anda
    ],
    theme: {
    extend: {},
    },
    plugins: [],
}