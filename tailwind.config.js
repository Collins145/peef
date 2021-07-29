module.exports = {
    purge: [
        './template-parts/*.php',
        './templates/*.php',
        './*.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                "primary": "#15284c",
                "secondary": "#f64e0f",
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
