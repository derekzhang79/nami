let baseUrl = 'http://localhost/nami/src/api/public/'
let imgUrl = 'http://localhost/nami/src/api/public/static'
import axios from 'axios'

let Axios = axios.create({
  transformRequest: [function (data) {
    let ret = ''
    for (let it in data) {
      ret += encodeURIComponent(it) + '=' + encodeURIComponent(data[it]) + '&'
    }
    return ret
  }],
  headers: {'X-Custom-Header': 'foobar'}
})

if (process.env.NODE_ENV === 'development') {

} else if (process.env.NODE_ENV === 'production') {
  // baseUrl = 'http://cangdu.org:8001';
}
export {
  baseUrl, imgUrl, Axios
}
