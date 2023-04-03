# NuxiWord

🐳 A Docker container that runs WordPress and Nuxt.js together. Nuxiword is a Docker-based solution that combines the power of WordPress and Nuxt.js, allowing you to build and deploy fast, SEO-friendly websites with ease. With Nuxiword, you can enjoy the flexibility and convenience of WordPress while also leveraging the performance and flexibility of Nuxt.js, making it an ideal choice for modern web development.

## Technologies Used

- [Nuxt 3](https://nuxt.com/docs/getting-started/introduction) a free and open-source framework with an intuitive and extendable way to create type-safe, performant and production-grade full-stack web applications and websites with Vue.js.
- [Wordpress](https://wordpress.org/) a free and open-source content management system (CMS)
- [Docker](https://www.docker.com) a platform designed to help developers build, share, and run modern applications.
- [Unocss](https://github.com/unocss/unocss) The instant on-demand Atomic CSS engine.

## Getting Started

To get started with the project, follow these steps:

### Prerequisites

- Docker: [https://www.docker.com/](https://www.docker.com/)
- Docker Compose: [https://docs.docker.com/compose/](https://docs.docker.com/compose/)

### Clone the repository

```
git clone https://github.com/unknownman/nuxiword.git
cd nuxiword
```


### Start the development environment

Run the following command to start the development environment:

```
./scripts/dev.sh
```

The development environment will be available at [http://localhost:3000](http://localhost:3000)
You can start editing the Nuxt.js app and see the changes live in your browser.

### Rebuild the frontend service

If you make changes to the frontend service, you can rebuild it with the following command:

```
./scripts/rebuild-frontend.sh
```

This will rebuild the frontend service and update the running containers.

## Contributing

If you find any issues or would like to contribute to Nuxiword, please feel free to create a pull request or submit an issue on the [Nuxiword GitHub repository](https://github.com/unknownman/nuxiword/issues).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
