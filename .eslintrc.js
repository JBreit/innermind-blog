module.exports = {
  "extends": "airbnb-base",
  "env": {
    "browser": true,
    "node": true,
    "mocha": true,
    "jasmine": true,
    "phantomjs": true,
    "protractor": true,
    "serviceworker": true
  },
  "globals": {
    "document": true,
    "window": true
  },
  "parser": "babel-eslint",
  "parserOptions": {
    "ecmaVersion": 2017,
    "sourceType": "module",
    "ecmaFeatures": {
        "jsx": true
    }
  },
  "plugins": [
    "import",
    "react"
  ],
  "root": true,
  "rules": {
    "comma-dangle": ["error", "never"],
    "consistent-return": 0,
    "indent": ["error", 2, { "SwitchCase": 1 }],
    "linebreak-style": ["error", process.env.NODE_ENV === "production" ? "unix" : "windows"],
    "no-param-reassign": 0,
    "no-underscore-dangle": 0,
    "no-shadow": 0,
  }
};