const path = require('path');

const { config } = require('@netkata/webpack-configs');

module.exports = (_env, argv) => {
    const generatedConfig = config(argv.mode, {
        features: {
            styles: {
                extractToFile: true,
                postcss: true,
                scss: true,
            },
            icons: {
                fontDest: 'src/fonts',
                scssDest: 'src/scss/0_settings/',
                src: 'src/icons',
            },
            utils: {
                jquery: 'internal',
            },
        },
        entry:{
          'main':  path.resolve(__dirname, 'src/index.js'),
          'jwt':  path.resolve(__dirname, 'src/jwt.js'),
          'admin':  path.resolve(__dirname, 'src/admin-panel.js'),
        },

        output: {
            path: path.resolve(__dirname, 'public'),
            filename: '[name].js',
        },

        resolve: {
            extensions: ['.web.js', '.mjs', '.js', '.json', '.jsx'],
            modules: [path.resolve(__dirname, 'src'), 'node_modules'],
        },

        devServer: {
            contentBase: path.join(__dirname, 'public'),
            hot: true,
        },
    });

    return generatedConfig;
};
