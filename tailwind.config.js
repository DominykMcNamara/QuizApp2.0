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
                'bm': ['18px', {
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
    plugins: [
        // ...

    ],
}
