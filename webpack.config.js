const path = require('path');

const { config } = require('@netkata/webpack-configs');

module.exports = (_env, argv) => {
    const generatedConfig = config(argv.mode, {
        features: {
            styles: {
                extractToFile: true,
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

        output: {
            path: path.resolve(__dirname, 'public'),
            filename: 'main.js',
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
