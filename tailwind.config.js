/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            container: {
                center: true,
                padding: '1rem',
                screens: {
                    '2xl': '1536px',
                    xl: '1280px',
                    lg: '1024px',
                    md: '768px',
                    sm: '640px',
                    xs: '480px',
                },
            },
            colors: {
                'bg-primary': 'var(--bg-primary)',
                'bg-sec': 'var(--bg-sec)',
                primary: 'var(--primary)',
                border: 'var(--border)',
                'text-sec': 'var(--text-sec)',
                'text-tet': 'var(--text-tet)',
            }
        },
    },
    plugins: [],
}

