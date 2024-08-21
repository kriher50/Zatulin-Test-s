/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', // Добавляем поддержку темной темы через класс
    theme: {
        extend: {
            // Здесь можно расширить тему
        },
    },
    plugins: [],
};
