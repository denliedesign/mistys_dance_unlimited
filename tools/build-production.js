const path = require('path');
const { spawnSync } = require('child_process');

// Webpack 4 uses MD4 for build hashes. Enable its provider only for this
// build subprocess on OpenSSL 3+; older Node releases do not accept the flag.
const args = [];
if (Number(process.versions.openssl.split('.')[0]) >= 3) {
    args.push('--openssl-legacy-provider');
}
args.push(
    require.resolve('webpack/bin/webpack.js'),
    '--no-progress',
    '--hide-modules',
    '--config=' + require.resolve('laravel-mix/setup/webpack.config.js')
);
const result = spawnSync(process.execPath, args, {
    cwd: path.resolve(__dirname, '..'),
    env: { ...process.env, NODE_ENV: 'production' },
    stdio: 'inherit'
});
if (result.error) console.error(result.error.message);
process.exit(result.status === null ? 1 : result.status);
