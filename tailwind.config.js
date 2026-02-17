import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"BR Candor"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#F7581F',
                    50: '#FEF0EB',
                    100: '#FDE1D6',
                    200: '#FBC3AD',
                    300: '#FAA585',
                    400: '#F8875C',
                    500: '#F7581F',
                    600: '#DE4913',
                    700: '#A3340C',
                    800: '#6D2308',
                    900: '#371104',
                },
                navy: {
                    DEFAULT: '#003264',
                    500: '#003264',
                    600: '#0C4176',
                    700: '#001E3C',
                    800: '#001428',
                },
                dark: {
                    DEFAULT: '#1B2B4B',
                },
                gray: {
                    50: '#F9FAFB',
                    100: '#F8F9FB',
                    200: '#EDEDED',
                    300: '#CDD2E4',
                    400: '#828B9C',
                    500: '#798192',
                    600: '#4B5563',
                    700: '#374151',
                    800: '#1F2937',
                    900: '#111827',
                },
            },
            maxWidth: {
                'container': '1240px',
                'header': '1360px',
            },
            fontSize: {
                'hero': ['70px', { lineHeight: '75px', fontWeight: '700', letterSpacing: '-0.02em' }],
                'global-title': ['60px', { lineHeight: '65px', fontWeight: '700', letterSpacing: '-0.02em' }],
                'h1': ['54px', { lineHeight: '1.2', fontWeight: '900' }],
                'h2': ['36px', { lineHeight: '1.3', fontWeight: '900' }],
                'h3': ['36px', { lineHeight: '1.3', fontWeight: '900' }],
                'h4': ['18px', { lineHeight: '1.3', fontWeight: '900' }],
                'h5': ['16px', { lineHeight: '1.3', fontWeight: '900' }],
                'body-lg': ['19px', { lineHeight: '30px' }],
                'body': ['16px', { lineHeight: '26px' }],
                'body-sm': ['14px', { lineHeight: '22px' }],
            },
            boxShadow: {
                'card': '0 4px 20px rgba(0, 0, 0, 0.08)',
                'card-hover': '0 10px 20px rgba(0, 0, 0, 0.1)',
                'mega-menu': '0px 4px 20px rgba(0, 0, 0, 0.08)',
                'form': '0px 4px 30px rgba(0, 0, 0, 0.08)',
            },
            borderRadius: {
                '14': '14px',
                '20': '20px',
                '25': '25px',
                '30': '30px',
            },
            spacing: {
                '18': '4.5rem',
                '22': '5.5rem',
                '30': '7.5rem',
            },
        },
    },
    plugins: [],
};
