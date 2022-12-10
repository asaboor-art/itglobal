import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services/';


export default function useGenerals() {

    const data = ref([]);
    // const errors = ref([]);
    // const category = ref({});
    const { errorAlert } = useService();

    const get = async(url) => {
        await axiosWrapper.get(url).then((response) => {
            data.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    return {
        data,
        get
    }
}