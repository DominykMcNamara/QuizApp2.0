/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

export default {
    darkMode: 'class',
    theme: {

        extend: {
            fontFamily: {
                sans: ['Rubik', 'Inter var', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'display': ['144px', {
                    lineHeight: '100%',
                }],
                'hl': ['64px', {
                    lineHeight: '100%',
                }],

                'hm': ['36px', {
                    lineHeight: '100%',
                }],
                'hs': ['28px', {
                    lineHeight: '100%',
                }],
                'bm': ['12px', {
                    lineHeight: '150%',
                }],
            },
            screens: {
                'desktop': '1440px',
                'tablet': '768px',
                'mobile': '344px'
            },
            colors: {
                'light-bluish': '#ABC1E1',
                'navy': '#3B4D66',
                'light-grey': '#F4F6FA',
                'white': '#FFFFFF',
                'green': '#26D782',
                'red': '#EE5454',
            }
        },
        backgroundImage: {
            'icon-accessibility': "url('/public/assets/images/icon-accessibility.svg')",
            'icon-correct': "url('/public/assets/images/icon-correct.svg')",
            'icon-css': "url('/public/assets/images/icon-css.svg')",
            'icon-error': "url('/public/assets/images/icon-error.svg')",
            'icon-html': "url('/public/assets/images/icon-html.svg')",
            'icon-incorrect': "url('/public/assets/images/icon-incorrect.svg')",
            'icon-js': "url('/public/assets/images/icon-js.svg')",
            'icon-moon-light': "url('/public/assets/images/icon-moon-light.svg')",
            'icon-moon-dark': "url('/public/assets/images/icon-moon-dark.svg')",
            'icon-sun-light': "url('/public/assets/images/icon-sun-light.svg')",
            'icon-sun-dark': "url('/public/assets/images/icon-sun-dark.svg')",
            'pattern-background-desktop-light': "url('/public/assets/images/pattern-background-desktop-light.svg')",
            'pattern-background-mobile-light': "url('/public/assets/images/pattern-background-mobile-light.svg')",
            'pattern-background-tablet-light': "url('/public/assets/images/pattern-background-tablet-light.svg')",
            'pattern-background-tablet-dark': "url('/public/assets/images/pattern-background-tablet-dark.svg')",
            'pattern-background-desktop-dark': "url('/public/assets/images/pattern-background-desktop-dark.svg')",
            'pattern-background-mobile-dark': "url('/public/assets/images/pattern-background-mobile-dark.svg')",

        },

        colors: {
            'purple': '#A729F5',
            'dark-navy': '#313E51',
            'navy': '#3B4D66',
            'grey-navy': '#626C7F',
            'light-bluish': '#ABC1E1',
            'light-grey': '#F4F6FA',
            'white': '#FFFFFF',
            'green': '#26D782',
            'red': '#EE5454',
        }

    },


    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    plugins: [],
}
