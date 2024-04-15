/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/login.blade.php",
    "./resources/views/registration.blade.php",
    "./resources/views/customer/customer-dashboard.blade.php",
    "./resources/views/admin/admin-dashboard.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        //font
        'clouded':'#D1D1D1',
        'white-smoke':'#F5F5F5',
        'baby-grey':'#BABABA',
        'dynamic-black':'#1E1E1E',
        'moon':'#A7A7A7',
        'fortress-grey':'#B8B8B8',

        //background
        'lighthouse': '#F4F4F4',
        'doctor':'#F9F9F9',
        'flame-seal':'#F2E35F',
        'pale-ale':'#FFF06C',

        'liquorice':'#3B3B3B',
        'disco':'#D5D5D5',
        
        
        'spanish-grey':'#989898',
        'dull':'#727171',
        'majestic':'#F1E9A1',

      },
      fontFamily:{
        'poppins':['Poppins',]
      },
      margin: {
        '1rem':'1rem',
        '2rem':'2rem',
        '3rem':'3rem'
      },
      fontSize:{
        wow:'23px',
        sm:'25px',
        drop:'18px',
      }
    },
  },
  plugins: [],
}

