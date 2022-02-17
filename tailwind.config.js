module.exports = {
  content: [
      './resources/**/*.{html,js,blade.php}',
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
      screens: {
          sm: '480px',
          md: '768px',
          lg: '976px',
          xl: '1440px',
      },
    extend: {},
  },
  plugins: [],
}
