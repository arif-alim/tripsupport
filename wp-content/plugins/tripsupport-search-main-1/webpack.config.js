const path = require("path");
const VueLoaderPlugin = require("vue-loader/lib/plugin");
const VuetifyLoaderPlugin = require("vuetify-loader/lib/plugin");
module.exports = {
  mode: "development",
  context: path.resolve(__dirname, "assets"),
  output: {
    filename: "main.bundle.js",
    path: path.resolve(__dirname, "assets/dist"),
  },
  watch: true,
  resolve: {
    alias: {
      vue: "vue/dist/vue.js",
    },
  },
  module: {
    rules: [
      { test: /\.js$/, use: "babel-loader" },
      { test: /\.vue$/, use: "vue-loader" },
      {
        test: /\.css$/i,
        use: ["style-loader", "css-loader", "postcss-loader"],
      },
      {
        test: /\.s(c|a)ss$/,
        use: [
          "vue-style-loader",
          "css-loader",
          "postcss-loader",
          "sass-loader",
        ],
      },
      {
        test: /\.(png|woff|woff2|eot|ttf|svg)$/,
        loader: "url-loader",
      },
    ],
    // rules: [
    //   {
    //     test: /\.css$/i,
    //     use: ['style-loader', 'css-loader'],
    //   },
    //   {
    //     test: /\.scss$/,
    //     use: ['vue-style-loader', 'css-loader', 'sass-loader'],
    //   },
    //   {
    //     test: /\.vue$/,
    //     loader: 'vue-loader',
    //   },
    //   {
    //     test: /\.(png|woff|woff2|eot|ttf|svg)$/,
    //     loader: 'url-loader',
    //   },
    //   {
    //     test: /\.s(c|a)ss$/,
    //     use: [
    //       'vue-style-loader',
    //       'css-loader',
    //       {
    //         loader: 'sass-loader',
    //         // Requires sass-loader@^7.0.0
    //         options: {
    //           implementation: require('sass'),
    //           indentedSyntax: true, // optional
    //         },
    //         // Requires sass-loader@^8.0.0
    //         options: {
    //           implementation: require('sass'),
    //           sassOptions: {
    //             indentedSyntax: true, // optional
    //           },
    //         },
    //       },
    //     ],
    //   },
    // ],
  },
  plugins: [
    // make sure to include the plugin!
    new VueLoaderPlugin(),
    new VuetifyLoaderPlugin(),
  ],
};
