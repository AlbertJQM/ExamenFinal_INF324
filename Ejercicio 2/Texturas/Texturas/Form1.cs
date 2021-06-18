using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data;
using System.Data.SqlClient;
using System.Collections;

namespace Texturas
{
    public partial class Form1 : Form
    {
        int cRx, cGx, cBx;
        ArrayList C = new ArrayList();
        SqlConnection cnn = new SqlConnection();
        SqlCommand cmd = new SqlCommand();
        public Form1()
        {
            InitializeComponent();
            cnn.ConnectionString = @"Data Source=DESKTOP-U2OF94B\SQLEXPRESS; Integrated Security=true; Initial Catalog=Texturas";
            cmd.Connection = cnn;
        }

        private void btnCargarImagen_Click(object sender, EventArgs e)
        {
            openFileDialog1.ShowDialog();
            Bitmap bmp = new Bitmap(openFileDialog1.FileName);
            picImagen.Image = bmp;
        }

        private void picImagen_MouseClick(object sender, MouseEventArgs e)
        {
            Bitmap bmp = new Bitmap(picImagen.Image);
            Color c = new Color();
            c = bmp.GetPixel(e.X, e.Y);
            cRx = 0;
            cGx = 0;
            cBx = 0;
            int p = 0;
            picColor.BackColor = c;
            for (int i = e.X; (i < e.X + 10) && (i < bmp.Width); i++)
                for (int j = e.Y; (j < e.Y + 10) && (j < bmp.Height); j++)
                {
                    p++;
                    c = bmp.GetPixel(i, j);
                    cRx = c.R + cRx;
                    cGx = c.G + cGx;
                    cBx = c.B + cBx;
                }
            cRx = cRx / p;
            cGx = cGx / p;
            cBx = cBx / p;
            txtR.Text = c.R.ToString(); txtRProm.Text = cRx.ToString();
            txtG.Text = c.G.ToString(); txtGProm.Text = cGx.ToString();
            txtB.Text = c.B.ToString(); txtBProm.Text = cBx.ToString();
            picColorProm.BackColor = Color.FromArgb(cRx, cGx, cBx);
            txtX.Text = e.X.ToString();
            txtY.Text = e.Y.ToString();
        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            try{
                string nombre = Microsoft.VisualBasic.Interaction.InputBox("Ingrese descripción de la textura.", "Agregar Textura");
                
                cmd.CommandType = System.Data.CommandType.StoredProcedure;
                cmd.CommandText = "insTextura";

                cmd.Parameters.Add(new SqlParameter("@R", SqlDbType.Int)).Value = int.Parse(txtR.Text);
                cmd.Parameters.Add(new SqlParameter("@G", SqlDbType.Int)).Value = int.Parse(txtG.Text);
                cmd.Parameters.Add(new SqlParameter("@B", SqlDbType.Int)).Value = int.Parse(txtB.Text);
                cmd.Parameters.Add(new SqlParameter("@Descripcion", SqlDbType.VarChar)).Value = nombre;

                cnn.Open();
                cmd.ExecuteNonQuery();
                cnn.Close();
                CargarTexturas();
                MessageBox.Show("Textura agregada correctamente.", "Información", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }catch(Exception ex){
                MessageBox.Show("Error al agregar la textura.", "Error",MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void CargarTexturas()
        {
            int i = 0;
            dgvTexturas.Rows.Clear();
            C.Clear();
            SqlDataReader dr;
            cmd.CommandType = System.Data.CommandType.Text;
            cmd.CommandText = "SELECT * FROM Textura";
            cnn.Open();
            dr = cmd.ExecuteReader();
            while(dr.Read()){
                Color c = Color.FromArgb(int.Parse(dr[1].ToString()), int.Parse(dr[2].ToString()), int.Parse(dr[3].ToString()));
                C.Add(c); 
                dgvTexturas.Rows.Add(dr[0].ToString(), dr[1].ToString(), dr[2].ToString(), dr[3].ToString(), dr[4].ToString());
                dgvTexturas.Rows[i].Cells[5].Style.BackColor = c;
                i++;
            }
            dr.Close();
            cnn.Close();
        }
        
        private void Form1_Load(object sender, EventArgs e)
        {
            CargarTexturas();
        }

        private void btnClasificar_Click(object sender, EventArgs e)
        {
            int cR, cG, cB;
            ArrayList R = new ArrayList();
            Bitmap img = new Bitmap(picImagen.Image);
            for (int k = 0; k < dgvTexturas.Rows.Count; k++)
            {
                Color c = Color.FromArgb(int.Parse(dgvTexturas.Rows[k].Cells[1].Value.ToString()), int.Parse(dgvTexturas.Rows[k].Cells[2].Value.ToString()), int.Parse(dgvTexturas.Rows[k].Cells[3].Value.ToString()));
                cR = c.R;
                cG = c.G;
                cB = c.B;
                for (int i = 0; i < img.Width; i = i + 2)
                {
                    for (int j = 0; j < img.Height; j = j + 2)
                    {
                        Color cx = img.GetPixel(i, j);
                        cRx = cx.R;
                        cGx = cx.G;
                        cBx = cx.B;
                        if (((cR - 20 <= cRx) && (cRx <= cR + 20)) && ((cG - 20 <= cGx) && (cGx <= cG + 20)) && ((cB - 20 <= cBx) && (cBx <= cB + 20)))
                        {
                            if (!R.Contains(int.Parse(dgvTexturas.Rows[k].Cells[0].Value.ToString())))
                            {
                                R.Add(int.Parse(dgvTexturas.Rows[k].Cells[0].Value.ToString()));
                            }
                        }
                    }
                }
            }
            for (int i = 0; i < dgvTexturas.Rows.Count; i++)
            {
                for (int j = 0; j < R.Count; j++)
                {
                    if (R[j].Equals(int.Parse(dgvTexturas.Rows[i].Cells[0].Value.ToString())))
                    {
                        dgvTexturasRec.Rows.Add(dgvTexturas.Rows[i].Cells[0].Value.ToString(), dgvTexturas.Rows[i].Cells[1].Value.ToString(), dgvTexturas.Rows[i].Cells[2].Value.ToString(), dgvTexturas.Rows[i].Cells[3].Value.ToString(), dgvTexturas.Rows[i].Cells[4].Value.ToString());
                        break;
                    }
                }
            }
        }

        private void dgvTexturasRec_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int cR, cG, cB;
            Color c = Color.FromArgb(int.Parse(dgvTexturasRec.CurrentRow.Cells[1].Value.ToString()), int.Parse(dgvTexturasRec.CurrentRow.Cells[2].Value.ToString()), int.Parse(dgvTexturasRec.CurrentRow.Cells[3].Value.ToString()));
            Bitmap img = new Bitmap(picImagen.Image);
            Bitmap bmp2 = new Bitmap(img.Width, img.Height);
            cR = c.R;
            cG = c.G;
            cB = c.B;
            for (int i = 0; i < img.Width; i++)
                for (int j = 0; j < img.Height; j++)
                {
                    Color cx = img.GetPixel(i, j);
                    cRx = cx.R;
                    cGx = cx.G;
                    cBx = cx.B;
                    if (((cR - 20 <= cRx) && (cRx <= cR + 20)) && ((cG - 20 <= cGx) && (cGx <= cG + 20)) && ((cB - 20 <= cBx) && (cBx <= cB + 20)))
                    {
                        bmp2.SetPixel(i, j, cx);
                    }
                }
            picImagenRec.Image = bmp2;
        }
    }
}
