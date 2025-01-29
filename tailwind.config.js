import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    blue: '#4A90E2',
                    dark: '#27364B',
                },
                secondary: {
                    gray: '#F8F9FA',
                    text: '#6B7280',
                },
                accent: {
                    red: '#E53E3E',
                    green: '#48BB78',
                }
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                jakarta: ['Plus Jakarta Sans', 'sans-serif'],
            },
            animation: {
                'float': 'float 6s ease-in-out infinite',
                'fade-in-up': 'fade-in-up 1s ease-out',
                'fade-in-right': 'fade-in-right 1s ease-out',
                'float-slow': 'float 8s ease-in-out infinite',
                'float-delay': 'float 10s ease-in-out 1s infinite',
                'float-reverse': 'float-reverse 12s ease-in-out infinite',
                'slide-right': 'slide-right 15s linear infinite',
                'slide-left': 'slide-left 15s linear infinite',
                'pulse-slow': 'pulse 4s ease-in-out infinite',
                'pulse-delay': 'pulse 4s ease-in-out 2s infinite',
            },
            keyframes: {
                'float-reverse': {
                    '0%, 100%': { transform: 'translateY(0) scale(1)' },
                    '50%': { transform: 'translateY(-30px) scale(1.05)' },
                },
                'slide-right': {
                    '0%': { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(100%)' },
                },
                'slide-left': {
                    '0%': { transform: 'translateX(100%)' },
                    '100%': { transform: 'translateX(-100%)' },
                },
            }
        },
    },
    plugins: [],
};
