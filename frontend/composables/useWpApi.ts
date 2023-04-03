/**
 * WordPress Composables
 * A collection of WordPress composable functions.
 */

import { Post } from "~~/types/post";

export default () => {
    const config = useRuntimeConfig();
    var WP_URL: string = "";
    // if (process.server) {
    //     WP_URL = "http://wordpress/backend/?rest_route=/wp/v2/"
    // } else {
    WP_URL = useRuntimeConfig().public.wpUrl;
    // }

    const get = async <T> (endpoint: string) => {
        return useFetch<T>(`${WP_URL}${endpoint}`);
    };

    const getPosts = async (
        category?: number,
        page: number = 1,
        perPgae: number = 20,
        fields: string = "author,id,excerpt,title,link,slug,date"
    ) => {
        let query: string = `posts/&page=${page}&per_page=${perPgae}&_embed=1`;
        if (category) {
            query += `&categories=${category}`;
        }
        return get<Post[]>(query);
    };

    const getPost = async (slug: string) => {
        return get<Post[]>(`posts/&slug=${slug}&_embed=1`);
    };

    const getCatgories = async (fields: string = "name,slug,count") => {
        return get<any>(`categories`);
    };

    const getCatgory = async (slug: string) => {
        return get<any>(`categories/&slug=${slug}`);
    };

    return {
        get,
        getPosts,
        getPost,
        getCatgories,
        getCatgory,
    };
};