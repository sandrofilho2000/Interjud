import type { AppProps } from 'next/app'
import '../../styles/globals.css'

function MyApp({ Component, pageProps }: AppProps) {
  return <Component {...pageProps} />
}

//cd ~/.ssh
//ssh interjud1@ftp.interjud.com.br  
//senha: Quick_94@12345

export default MyApp
