const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "primary": "#1f4b8e",
                "primary-dark": "#102a52",
                "secondary": "#182430",
                "secondary-dark": "#060C11",
              },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },


    plugins: [
        require('@tailwindcss/forms'),
        plugin(function({ addUtilities, theme }) {
          const newUtilities = {
              '.custom-scrollbar': {
                  '.custom-scrollbar::-webkit-scrollbar': { width: '6px' },
                  '.custom-scrollbar::-webkit-scrollbar-track': { background: theme('bg-secondary')},
                  '.custom-scrollbar::-webkit-scrollbar-thumb': { background: '#888' },
                  '.custom-scrollbar::-webkit-scrollbar-thumb:hover': {background: '#555'},
              }
          }
    
          addUtilities(newUtilities, ['responsive', 'hover'])
        })
      ],
    
};
