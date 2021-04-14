    <?php
    class Model_status extends CI_Model {
        public function listing()
        {
            $this ->db ->select('project.*,pelanggan.nama_pel as nama_pel');
            $this ->db ->from('project');
            $this->db->join('pelanggan','pelanggan.id_pelanggan = project.id_pelanggan','left');
            $this ->db ->order_by('id_pelanggan','asc');
            $query=$this->db->get();
            return $query->result();
        }

        public function get_all()
        {
            $this ->db ->select('project.*,pelanggan.nama_pel,');
            $this ->db ->from('project');
            $this->db->join('pelanggan','pelanggan.id_pelanggan = project.id_pelanggan','left');
            $this ->db ->order_by('id_pelanggan','asc');
            $query=$this->db->get();
            return $query->result();
            //echo $this->db->last_query();
        }


        public function get_project_by_programmer($id_user) {
            $query=$this ->db ->select('project.*,pelanggan.nama_pel,');
            $query=$this->db->from("project");
            $query=$this->db->join('pelanggan','pelanggan.id_pelanggan = project.id_project','left');
            $query=$this->db->where("id_programmer",$id_user)
                            ->get();
            return $query->result();
        }

        public function get_by_pelanggan($id_user)
        {
            $query = $this->db->select("*")
                 ->from('project')
                 ->where("id_pelanggan", $id_user)
                 ->order_by('id_project', 'DESC')
                 ->get();
            return $query->result();
        }

        public function edit($id_karyawan)
        {

            $query = $this->db->where("id_project", $id_karyawan)
                    ->get("project");

            if($query){
                return $query->row();
            }else{
                return false;
            }

        }

        public function update($data, $id)
        {
            $query = $this->db->update("project", $data, $id);  

            if($query){
                return true;
            }else{
                return false;
            }

        }

        //Untuk Function Chart

        public function get_karyawan()
        {
            $query=$this->db->select("nama_kar,username,level");
            $query=$this->db->from("user");
            $query=$this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner")	 
            ->order_by("id_user", "DESC")
            ->get();
            return $query->result();
        }

        function semua() {
            
            $query=$this->db->select("*");
            $query=$this->db->from("project")
            ->get();
            
            return $query->result();
            
        }

        function getNamaPel() {
            $query=$this->db->select("*");
            $query=$this->db->from("pelanggan")
            ->get();

            return $query->result();
        }


        function getsharga()
        {
            $query=$this->db->select("month(tanggal_po) as bulan_po, sum(harga) as total_harga");
            $query=$this->db->from("project "); 
            $query=$this->db->WHERE("month(tanggal_po) =".date('m'))
                            ->get();
            if($query->num_rows()>0)
            {
                return $query->row();       
            }
            else
            {
                return 0;
            }  
        }

        function status()
        {
            $query = $this->db->query('SELECT * FROM project WHERE status= "selesai"');
            $status=$query->num_rows();
            return $status;
        }

        function Belum_selesai()
        {
            $query = $this->db->query('SELECT * FROM project WHERE status !="selesai"');
            $status=$query->num_rows();
            return $status;
        }

        function pie() {
            $sql = "SELECT   AS hasil, COUNT(*) total FROM tb_survey GROUP BY hasil ";
            return $this->db->query($sql);
        }


        function gettahun()
        {
            $query=$this->db->select("year(tanggal_po) as tahun_po, sum(harga) as tot_tahun");
            $query=$this->db->from("project "); 
            $query=$this->db->WHERE("year(tanggal_po) =".date('Y'))
                            ->get();
            if($query->num_rows()>0)
            {
                return $query->row();       
            }
            else
            {
                return 0;
            }   
        }

        function getharga()
        {
            $query=$this->db->select_avg("harga");
            $query=$this->db->from("project")
                            ->get();

            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }
            else
            {
                return 0;
            }
        }

        function getpresentase()
        {
        
            $query=$this->db->select_avg("presentase");
            $query=$this->db->from("project")
                            ->get();

            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }
            else
            {
                return 0;
            }
        }

        function get_data_chart(){
        $query = $this->db->query("SELECT SUM(harga)as harga,tanggal_po ,DATE_FORMAT(tanggal_po,'%d %M') As tanggal_po FROM project GROUP BY tanggal_po");
            if($query->num_rows() > 0){
                foreach($query->result() as $data){
                    $hasil[] = $data;
                }
                return $hasil;
            }
        }


        function namaproject() {
            
            $query=$this->db->select("nama_project");
            $query=$this->db->from("project");
            $query=$this->db->where("id_project")
            ->get();
            
            return $query->result();
            
        }
        function persentase()
        {
            $query=$this->db->select("presentase");
            $query=$this->db->from("project")
            ->get();

            if($query->num_rows()>0)
            {
                    return $query->num_rows();
            }
            else
            {
                return 0;
            }
            
    
        }

        // pie chart

        function new(){
            $this->db->where("status =","new");
            return $this->db->count_all_results("project");
        }
        
        function analisa(){
            $this->db->where("status =","analisa");
            return $this->db->count_all_results("project");
        }
 
        function desain(){
            $this->db->where("status =","desain");
            return $this->db->count_all_results("project");
        }
             
        function implementasi(){
            $this->db->where("status =","implementasi");
            return $this->db->count_all_results("project");
        }
       
        function testing(){
            $this->db->where("status =","testing");
            return $this->db->count_all_results("project");
        }
    
        function selesai(){
            $this->db->where("status =","selesai");
            return $this->db->count_all_results("project");
        }

        // Untuk Chart Admin Management
        Public function jml_user() {
            $query=$this->db->select ("id_user");
            $query=$this->db->from("user");
            $query=$this->db->where("level","admin")
                        ->get();
            if($query->num_rows()>0) {
                return $query->num_rows();
            }
            else {
                return 0;
            }

        }

        Public function jml_programmer() {
            $query=$this->db->select ("id_user");
            $query=$this->db->from("user");
            $query=$this->db->where("level","programmer")
                        ->get();
            if($query->num_rows()>0) {
                return $query->num_rows();
            }
            else {
                return 0;
            }
        }

        Public function jml_marketing() {
            $query=$this->db->select ("id_user");
            $query=$this->db->from("user");
            $query=$this->db->where("level","marketing")
                        ->get();
            if($query->num_rows()>0) {
                return $query->num_rows();
            }
            else {
                return 0;
            }
        }

        Public function jml_pelanggan() {
            $query=$this->db->select ("id_user");
            $query=$this->db->from("user");
            $query=$this->db->where("level","pelanggan")
                        ->get();
            if($query->num_rows()>0) {
                return $query->num_rows();
            }
            else {
                return 0;
            }
        }
    }