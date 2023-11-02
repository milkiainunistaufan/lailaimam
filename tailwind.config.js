/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        lux : 'Luxurious Script',
        mig : 'Mingzat',
      },
      colors: {
        primary : '#F5D1CA',
        secondary: '#91DDF2',
        tiga : '#B0C9D2',
        fourth : '#534A3C',
      },
    },
  },
  plugins: [],
}

