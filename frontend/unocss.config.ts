import {
    defineConfig,
    presetAttributify,
    presetUno,
    presetWind,
    presetWebFonts,
    presetTypography
    // transformerDirectives,
    // transformerVariantGroup,
} from 'unocss';
// import { presetForms } from '@julr/unocss-preset-forms';

export default defineConfig({
    safelist: [],
    presets: [
        presetUno(),
        presetWind(),
        presetAttributify(),
        // presetForms(),
        presetTypography(),
        presetWebFonts({
            fonts: {
                sans: 'Noto Sans Arabic',
                serif: 'Vazirmatn',
                baloo: 'Baloo Bhaijaan 2',
                ibm: 'IBM Plex Sans Arabic',
                reader: 'Readex Pro',
                kola: 'Kola',
                teko: 'Teko',
                podvaka: 'Podkova'
            },
        }),
    ],
    // transformers: [transformerDirectives(), transformerVariantGroup()],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '3rem',
                xl: '4rem',
                '2xl': '5rem',
            },
            screens: {
                sm: '480px',
                md: '768px',
                lg: '976px',
                xl: '1440px',
            },
        },
        colors: {
            brand: {
                primary: 'rgb(30,100,150) ',
            },
        },
    },
    shortcuts: [

    ],
    rules: [
        [/^aspect-\[(.+)\]$/, (match) => ({ 'aspect-ratio': `${match[1]}` })],
        [
            /^line-clamp-\[(.+)\]$/,
            (match) => ({
                overflow: 'hidden',
                display: '-webkit-box',
                '-webkit-box-orient': 'vertical',
                '-webkit-line-clamp': `${match[1]}`,
            }),
        ],
    ],
});
