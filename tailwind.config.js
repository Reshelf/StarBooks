// prettier-ignore
module.exports = {
    mode: 'jit',
    darkMode: 'class',
    important: true,
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
      extend: {
        colors: {
            'transparent': 'transparent',
            'current': 'currentColor',
            // 'primary': '#3AA2FF',
            'primary': '#0570de',
            // 'primary': '#08a698',
            // 'primary': '#1F51C5',
            // 'primary': '#009FFF',
            'primary-light': '#9cc4ff',
            'aaa': '#aaa',
            'bbb': '#bbb',
            'ccc': '#ccc',
            'cd': '#cdcdcd',
            'ddd': '#ddd',
            'eee': '#eee',
            'ef': '#efefef',
            'ea': '#eaeaea',
            '333': '#333',
            '666': '#666',
            'light': '#ebeced',
            'gray': '#B0B3B8',
            'gray-1': '#45494B',
            'gray-2': '#E3E6EA',
            'gray-3': '#cacccf',
            'border': '#9B99AF',
            // white
            'white': '#ffffff',
            'f2': '#f2f2f2',
            'f3': '#f3f3f3',
            'f4': '#f4f4f4',
            'f8': '#f8f8f8',
            'white-1': '#fefefe',
            'white-2': '#f6f6f6',
            'f5': '#F5F5F5',
            // dark
            'dark': '#1c1c1e',
            'dark-1': '#2c2c2e',
            'dark-2': '#3a3a3c',
            'dark-blue': '#022f61',
            //color
            't-color': '#3e3e3e',
            't-color-2': '#565659',
            't-color-3': '#8f8f90',
            // 't-color': '#455078',
            't-d-color': '#B2B1B3',
            't-d-color-2': '#96969B',
            'b-l-c': '#dadce0',
            'red': '#e12472',
            'pink': '#DA4FA8',
            'orange': '#F77777',
            'blue': '#4e86ff',
            'yellow': '#f3c42d',
            'warning': '#e19224',
            'purple': '#3f3cbb',
            'green': '#08a698',
            'midnight': '#121063',
            'metal': '#565584',
            'tahiti': '#3ab7bf',
            'silver': '#ecebff',
            'bubble-gum': '#ff77e9',
            'bermuda': '#78dcca',
            '5856d6': '#5856d6',
            '007aff':'#007aff',
            '34aadc': '#34aadc',
            '60C9F7': '#60C9F7',
            '4cd964': '#4cd964',
            'ff2d55': '#ff2d55',
            'ff3b30': '#ff3b30',
            'ff9500': '#ff9500',
            'ffcc00': '#ffcc00',
            '8e8e93': '#8e8e93',
        },
      },
    },
    plugins: []
}
